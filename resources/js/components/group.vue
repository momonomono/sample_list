<template>
    <article class="p-top__container">
        <h2 class="p-top__title u-mt20 u-md20">{{ title }}</h2>
        
        <div class="p-top__imageBox u-mt50">
            <img class="p-top__icon" src="img/no_image.jpg" @click="clickDetailShow">
            <img class="p-top__icon" src="img/no_image.jpg" @click="clickDetailShow">
            <img class="p-top__icon" src="img/no_image.jpg" @click="clickDetailShow">
        </div>

    </article>
</template>

<script>
    export default{
        props:{
            title:{
                type : String,
                require : true
            },
            image:{
                type : Object,
                require : false
            },
            showFlg:{
                type : Boolean,
                require : true
            },
            clickDetailShow:{
                type : Function
            }
        },
    }
</script>