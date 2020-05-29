<template>
    <div class="contacts-list">
        <ul>
            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{ 'selected': index == selected }">
                <div class="contact">
                    <p class="name">{{ contact.name }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: 0
            };
        },
        methods: {
            selectContact(index, contact) {
                this.selected = index;
                this.$emit('selected', contact);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .contacts-list {
        flex: 2;
        height: 70vh;
        overflow-y: auto;
        border-left: 1px solid rgba(0,0,0,0.1);

        ul {
            list-style-type: none;
            padding-left: 0;

            li {
                display: flex;
                padding: 2px;
                padding-left: 10px;
                border-bottom: 1px solid rgba(0,0,0,0.1);
                height: 40px;
                position: relative;
                cursor: pointer;

                &.selected {
                    background-color: rgba(0,0,0,0.1);
                }

                .contact {
                    flex: 3;
                    font-size: 12px;
                    overflow: hidden;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;

                    p {
                        margin: 0px;

                        &.name {
                            font-weight: bold;
                        }
                    }
                }
            }
        }
    }
</style>