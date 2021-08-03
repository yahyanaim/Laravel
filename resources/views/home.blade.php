<x-app-layout>

<style>
.comment-section{padding:20px 140px; rgb(239 239 239 / 25%);}
.R-title{color: #00aeef; font-size: 22px;font-weight:700; margin-left: 16% ; margin-top: 2%;}
.comment-section .media-review{padding:20px 0px;border-bottom:1px solid #ccc;}
.comment-section .media-review:first-child{border-top:1px solid #ccc;}
.comment-section .media .media-user{margin-right: 15px; border-radius: 50%;overflow: hidden; background: rgb(236, 236, 236); width: 77px;height: 77px;  }
.comment-section .media .media-user img{width:100%; height:100%; object-fit: cover;}
.comment-section .media .M-flex{display: flex;justify-content: space-between;}
.comment-section .media .M-flex .title{font-size: 12px; color: #1c1d36;  margin-bottom: 10px;font-weight:400;}
.comment-section .media .M-flex .title span{font-size: 20px;  display: block;font-weight:700;margin-bottom:5px;}
.comment-section .media .description{font-size: 15px;  color: #000000;margin-bottom: 20px;}
.btn
{
    padding: 5px;
    height: 40px;
    line-height: inherit;
    color: inherit;
    background: blue;
    border-radius: 5px;
    font-size: 12px;
    font-weight: 500;
    color: white;
}
.div
{
    margin-top: 2% ;
}
input
{
  
  width: 93%;
  height: 40px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
 
}
form
{
  width: 80%;
  margin-left: 10%;
}

</style>



    
  <h2 class="R-title">Comments :</h2>    
@foreach($posts as $post)
    <div class="div"></div> 
    <div class="comment-section">
        <div class="container"> 
          <div class="review">
            <div class="comment-section">
              <div class="media media-review">
                <div class="media-user"><img src="https://www.pngkey.com/png/full/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" alt=""></div>
                <div class="media-body">
                  <div class="M-flex">
                    <h2 class="title"><span> Yahia Naim </span>{{($post->title)}}</h2>
                  </div>
                  <div class="description">{{($post->body)}}</div>
                </div>
                </div>
            </div>      
         </div>     
        <form class="form" method="POST" action="{{route('home')}}" >
          @csrf
          <div>
            <button class="btn"  value="submit type="submit"> Add Replay</button>
            <input type="text"
            name="reply"
            id="name"
            class="form-control" 
            placeholder="Replay .."
             required
             ></ipnut>
          </div>
         </form>   
      
@endforeach    
      
    


    
  
</x-app-layout>
