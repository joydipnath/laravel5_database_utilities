<!DOCTYPE html>
<html>
<head>
    <title>{{$data['page_title']}}</title>
</head>
<body>
 
    <h1>{{$data['welcome_message']}}</h1>
    <h1>{{ Session::get('success') }}</h1>
    
    
    <form type="form" action="{{route('get_dump')}}" method="get">
        
        <button type="subit">Create Database dump</button>
    
    </form>
    
 
</body>
</html>