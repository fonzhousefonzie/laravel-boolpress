<template>
    <div>
        <h1>Contattaci</h1>
        <form @submit.prevent="formSubmit">
            <input type="text" placeholder="Nome" v-model="name">
            <br>
            <textarea cols="30" rows="10" placeholder="Messaggio" v-model="message"></textarea>

            <button type="submit">Invia</button>
        </form>
    </div>
</template>

<script>
import axios from "axios"

export default {
    data() {
        return {
            name: "",
            message: ""
        }
    },
    methods: {
        formSubmit() {
            axios.post("/api/contacts", {
                name: this.name,
                message: this.message
            })
        }
    }
    }
</script>