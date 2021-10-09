<template>
    <div>{{ profile }}</div>
</template>

<script>
export default {

    mounted() {
        if (localStorage._token == undefined) {
            alert("Unauthorized");
            this.$router.push({name: 'login'})
        } else {
            axios.get("/api/user").then(res => {
                this.profile = res.data.user;
            }).catch(err => {
                alert(err.response.data.message)
            });
        }
    },

    data() {
        return {profile: {}}
    }
}
</script>
