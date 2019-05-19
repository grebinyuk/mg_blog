<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <article id="post-1" class="post">
                        <div class="post-image"><a href="#"><img :src="post.image" alt="Щось тут не те!" v-if="post.image_show"></a></div>
                        <div class="post-content">
                            <h2 class="post-title">{{post.title}}</h2>
                            <div class="date-created"><a href="">{{post.created_at}}</a></div>
                            <p>{{post.description}}</p>
                            <div class="post-footer">
                                <a href="" class="more-link">{{post.created_by}}</a>
                                <div class="post-social">
                                    <a href="" target = "_blank"></a>
                                    <a href="" target = "_blank"></a>
                                    <a href="" target = "_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      props:['post'],
      data: function(){

      },

        mounted() {
            console.log('CONGRATULANION!')
        }
    }
</script>


<style >


*, *::after, *::before{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  transition: .5s ease-in-out;
}

ul{
  list-style: none;
}

a{
  text-decoration: none;
  outline: none;
}

img{
  display: block;
  width: 100%;
}

h1, h2, h3, h4, h5, h6 {
text-transform: uppercase;
font-weight: normal;
letter-spacing: 1px;

}
body {
font-family: 'Open Sans', arial, sans-serif;
font-size: 14px;
line-height: 1;
color: #6c757d;
background: #f7f7f7;
}

.container {
margin: 0 auto;
width: 100%;
max-width: 960px;
padding: 0 15px;
}


/* блок для статьи */
.post {
  margin-bottom: 35px;
}
.post-content p {
  line-height: 1.5;
  padding-bottom: 1em;
}
.post-image {
  position: relative;
  margin-bottom: 30px;
  width: 590px;
  height: 375px;
  min-width: 480px;
  min-height: 280px;
  background-color: #dae9f9;
  border-radius: 10px;
}

.post-image a {
  position: relative;
  width: 100%;
  height: 100%;
}

.post-image a img{
  position: relative;
  border-radius: 10px;
  width: 100%;
  height: 100%;
}

.date-created {
  margin-bottom: 15px;
}
.date-created a {
color: #B9BBDB;
text-transform: uppercase;
}
.post-title {
margin-bottom: 12px;
font-size: 26px;
}

.post-footer {
  border-top: 1px solid #EBEBE3;
  border-bottom: 1px solid #EBEBE3;
  position: relative;
  margin-top: 15px;
}

.more-link{
  position: relative;
  display: inline-block;
  font-size: 14px;
  text-transform: uppercase;
  color: #aaa6ab;
  line-height: 44px;
  padding: 0 22px;
  background: #d9dce0;
  letter-spacing: 0.1em;
  white-space: nowrap;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}

.more-link::after{
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  top: 0;
  right:0;
  border: solid transparent;
  border-width: 22px 18px;
  border-left-color: #d9dce0;
  transform: translateX(100%);
}

.post-social {
  position: absolute;
  left: auto;
  top: 50%;
  right: 0;
  text-align: right;
  transform: translateY(-50%);
  padding: 0;
  font-size: 12px;
}

.post-social a{
  display: inline-block;
  margin-left: 8px;
  color: #CDCDD7;
  width: 25px;
  height: 25px;
  line-height: 23px;
  text-align: center;
  border-radius: 50%;
  border: 1px solid;
}


.post-image-small{
  width: 30%;
  float: left;
  margin-right: 15px;
}

/* Медиа-запросы */

@media (max-width: 768px) {
/* показываем кнопку для переключения верхней навигации */
/* отменяем обтекание левой и правой колонок, устанавливаем им ширину 100%*/
}

@media (max-width: 480px) {
/* отменяем обтекание для логотипа и выравниваем по центру*/
.post-footer {
  border-top: none;
  border-bottom: none;
  text-align: center;
}
/* отменяем позиционирование кнопок соцсетей */
.post-social {
position: static;
text-align: center;
transform: none;
margin-top: 20px;
}
}
</style>
