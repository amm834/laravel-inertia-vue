<script setup>

import RootLayout from "../../Layouts/RootLayout.vue";

defineProps({
    products: Array,
})

</script>
<template>
    <RootLayout>
        <ul>
            <li
                v-for="product in products"
                :key="product.id"
            >
                {{ product.name }} - ${{ product.price }}
            </li>
        </ul>
    </RootLayout>
</template>
