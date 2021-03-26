<template>
    <div class="l-header u-bg__header">
        <div class="p-header c-header">
            <img src="img/logo.png" class="c-header__logo">

            <ul class="c-header__nav">
                <li class="c-header__item" v-for="(item,index) in loginItems" :key="index">{{ item }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default{
        data : function(){
            return {
                loginItems :[
                    "マイページ",
                    "段位戦結果",
                    "メッセージ",
                    "ログアウト",
                ]
            }
        }
    }
</script>