<template>
    <span class="invalid-feedback">
        <slot></slot>
    </span>
</template>

<script>
export default {
    props: ["errors"]
};
</script>