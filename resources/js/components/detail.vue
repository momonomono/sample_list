<template>
    <div class="p-top__detail-test">
        <div class="p-top__artboard">
            <button @click="clickDetailHide" class="p-top__button">閉じる</button>
        </div>
    </div>
</template>

<script>
    export default{
        props : {
            clickDetailHide:{
                type:Function
            }
        }
    }
</script>
