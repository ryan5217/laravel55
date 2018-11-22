<template>
    <div>
        <el-row>
            <el-carousel :interval="4000" type="card" height="200px">
                <el-carousel-item v-for="item in banners" :key="item.id">
                    <span>{{item.txt}}</span>
                    <img :src="item.src">
                </el-carousel-item>
            </el-carousel>

        </el-row>
        <router-view></router-view>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                banners:[
                    {
                        'id':'0',
                        'src':require('../../imgs/banner/1.jpg'),
                        'txt':'我是第一个'
                    },
                    {
                        'id':'1',
                        'src':require('../../imgs/banner/2.jpg'),
                        'txt':'我是第二个'
                    },
                    {
                        'id':'2',
                        'src':require('../../imgs/banner/3.jpg'),
                        'txt':'我是第三个'
                    },
                    {
                        'id':'3',
                        'src':require('../../imgs/banner/4.jpg'),
                        'txt':'我是第四个'
                    }
                ]
            }
        }
    }
</script>

<style>
    .el-carousel__item h3 {
        color: #475669;
        font-size: 14px;
        opacity: 0.75;
        line-height: 200px;
        margin: 0;
    }

    .el-carousel__item:nth-child(2n) {
        background-color: #99a9bf;
    }

    .el-carousel__item:nth-child(2n+1) {
        background-color: #d3dce6;
    }
</style>