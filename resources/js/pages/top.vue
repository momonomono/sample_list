<template>
    <div class="l-container">
        
        <div class="p-top c-top u-mt50">
            <Group title="短距離" :showFlg="showFlg" :clickDetailShow="clickDetailShow"/>

            <Group title="マイル" :showFlg="showFlg" :clickDetailShow="clickDetailShow"/>

            <Group title="中距離" :showFlg="showFlg" :clickDetailShow="clickDetailShow"/>

            <Group title="長距離" :showFlg="showFlg" :clickDetailShow="clickDetailShow"/>

            <Group title="ダート" :showFlg="showFlg" :clickDetailShow="clickDetailShow"/>
        </div>

        <Detail :class="topDetailShow" :clickDetailHide="clickDetailHide"/>
    </div>
</template>

<script>
    import Group from "../components/group.vue";
    import Detail from "../components/detail";

    export default{
        data:function(){
            return {
                showFlg : false,
                topDetailShow: "c-top__detail-hide"
            }
        },
        methods:{
            clickDetailShow(){
                this.showFlg = true;
                this.topDetailShow = "c-top__detail";
            },
            clickDetailHide(){
                this.showFlg = true;
                this.topDetailShow = "c-top__detail-hide";
            }
        },
        components :{
            Group,
            Detail
        }
    }
</script>