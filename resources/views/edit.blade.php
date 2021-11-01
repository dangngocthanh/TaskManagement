<form action="{{ route('user.update',$id) }}" method="post">
    @csrf
    @method('patch')
    <lable for="name">Name</lable>
    <input type="text" name="name" id="name" value="{{ $name }}"><br><br>
    <lable for="phone">Phone number</lable>
    <input type="text" name="phone" id="phone" value="{{ $phone }}"><br><br>
    <lable for="email">Email</lable>
    <input type="text" name="email" id="email" value="{{ $email }}"><br><br>
    <input type="hidden" name="id" value="{{ $id }}">
    <button>Update</button>
</form>
