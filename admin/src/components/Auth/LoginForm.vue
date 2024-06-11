<template>
    <q-page id="loginPage"> 
        <q-toolbar class="text-white bg-teal-8">
            <q-toolbar-title>Login</q-toolbar-title>
        </q-toolbar>

        <q-scroll-area class="form-style">
            <div class="text-h6 text-center q-pt-md">
                <q-img src="/takoyaki.png" height="60px"
                width="60px"></q-img>
                <div>EV Charge Map</div>
            </div>
            <div class="q-pa-md q-gutter-md">
                <div class="text-center">Register and get extra features!</div>
            </div>
            <q-input class="q-pt-md" outlined stack-label label="Email">
                <template v-slot:append>
                    <q-icon name="close" />
                </template>
            </q-input>
            <q-input class="q-pt-md" outlined stack-label label="Password">
                <template v-slot:append>
                    <q-icon name="close" />
                </template>
            </q-input>
            <div>
                <q-btn color="black" size="lg" class="full-width" label="Login"></q-btn>
            </div>
            <div class="q-px-md q-mt-xl text-center">
                <div class="q-mb-md no-account">Don't have an account</div>
                <q-btn color="teal" outlined rounded to="/auth/register"
                size="15px">Register</q-btn>
            </div>
        </q-scroll-area>
    </q-page>
</template>

<script setup>
</script>

<style lang="scss">
#loginPage{
    .form-style{
        margin: 0 auto;
        height: calc(100vh - 100px);
        max-width: 500px;
    }
    .no-account{
        font-size: 17px;
    }
}
</style>