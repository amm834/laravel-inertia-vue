<template>
    <main>
        <div v-if="page.props.flash.message" class="bg-red-500">
            {{ page.props.flash.message }}
        </div>

        <div v-if="page.props.name" class="bg-red-500">
            {{ page.props.name}}
        </div>

        <Link href="/products" >Home</Link>
        <Link href="/about">About</Link>
        <slot/>
    </main>
</template>
<script setup>
import {Link, usePage} from "@inertiajs/vue3";
const page = usePage()

console.log(page.props.name)

</script>


<style>
.bg-red-500 {
    background: red;
}
</style>
