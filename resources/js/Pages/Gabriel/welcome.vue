<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ gabriel_data: Object })
</script>

<template>
    <Layout>

        <Head title="Welcome" />
        <h1>Welcome</h1>
        <p>Hello {{ gabriel_data.name }}, welcome to your first Inertia app!</p>

    </Layout>
</template>