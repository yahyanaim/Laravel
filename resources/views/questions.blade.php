

<style>

.bodyy
 {
  display: flex;
  justify-content: center;
  align-items: center;
}


button {
  width: 100%
}

.form {
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 400px;
  position: absolute;
  bottom: 27%;
}

button {
  width: 100%;
}

.span
{
  margin: 5% 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px; width: 23%;   padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 20px;
  padding-left: 120px;
  background: rgb(202, 255, 202) ;
}



</style>    


<x-app-layout>

    <div class="bodyy">
      @if(Session::has('questions'))
      <span class="span">{{Session::get('questions')}}</span>
      @endif
     
        <form class="form" method="POST" action="{{route('save')}}">
            @csrf
            <div class="mb-4">
              <center>Add Question</center> 
              <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                  Title
                </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="title" placeholder="Title">
            </div>
            <div class="mb-4">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
            Question
            <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" name="body" placeholder="Enter Your Question"></textarea>
          </label>
            </div>
            <button style=" background: blue;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="submit">
                Submit
            </button>
          </div>
          </form>
    </div>      
</x-app-layout>
