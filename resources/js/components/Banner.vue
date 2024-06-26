<template>
  <Container>
    <div class="w-full h-[650px] flex items-center overflow-hidden">
        <slot name="items"></slot>
    </div>
  </Container>
</template>

<script setup>
import Container from '@/components/Container.vue'
</script>