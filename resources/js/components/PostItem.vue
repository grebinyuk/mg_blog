<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <article id="post-1" class="post">

                        <div class="post-image">
                            <a href="#"><img  alt="Щось тут не те!" v-if="imgUrl" :src="imgUrl"> </a>
                            <button class="img-button"type="button" name="button" @click="changeImg">{{isSearching ? 'Searching...' : 'change'}}</button>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">{{post.title}}</h2>
                            <div class="date-created"><a href="">{{post.created_at}}</a></div>
                            <p>{{post.description}}</p>

                            <div class="post-footer">
                                <a href="" class="more-link">{{post.created_by}}</a>
                                <div class="post-social">
                                    <a href="#"><font-awesome-icon :icon="['fas','thumbs-up']"/></a>
                                    <a href="#"><font-awesome-icon :icon="['fas','thumbs-down']"/></a>
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
          return {
            imgUrl: "",
            isSearching: false,
            apiUrl: 'https://pixabay.com/api',
            images: null,
            apiKey: '12534630-8e1d54c66e43f11213fc57daf',
            query:''
          }
      },

        mounted() {
            console.log('CONGRATULANION!'),
            this.renderImg()
        },

        methods: {
          renderImg() {
            if(this.post.show_img){
              return this.imgUrl=this.post.image;
            }
            return this.imgUrl='';
          },

          changeImg(){
            this.query=  this.post.title;
            if(this.query){
            this.images=[];
            this.isSearching=true;
            const searchQuery = encodeURIComponent(this.query);

              axios.get(`${this.apiUrl}/?key=${this.apiKey}&q=${searchQuery}s&image_type=photo&per_page=15&safesearch=true`, {
                headers:{
                  'Access-Control-Allow-Origin': '*',
                }
              })
              .then(res=>{
                if (res.data.total != 0){
                  this.images = res.data.hits;
                  this.isSearching = false;
                  let random=Math.floor(Math.random()*15);
                  return this.imgUrl=this.images[random].imageURL;
                }else{
                  this.isSearching=false;
                  return null;
                }
              })
              .catch(err=>{
                console.log('Error:'+err);
                this.isSearching=false;
              })
            }

           }
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


/*  */
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
.img-button{
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 5;
  background-color: #B9BBDB;
  text-transform: uppercase;
  color: white;
  padding: 8px;
  border: none;
  border-bottom-right-radius: 9px;
  border-top-left-radius: 9px;
  letter-spacing: 1px;
  opacity: 0.6;
  font-size: 16px;
}

.img-button:hover{
  opacity: 0.8;
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

/*  */

@media (max-width: 768px) {
/*  */
/**/
}

@media (max-width: 480px) {
/* */
.post-footer {
  border-top: none;
  border-bottom: none;
  text-align: center;
}
/* */
.post-social {
position: static;
text-align: center;
transform: none;
margin-top: 20px;
}
}
</style>
