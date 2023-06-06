<script setup>
defineProps({
    products: Array,
})
</script>
<template>
    <div>
        <ul>
            <li
                v-for="product in products"
                :key="product.id"
            >
                {{ product.name }} - ${{ product.price }}
            </li>
        </ul>
    </div>
</template>
