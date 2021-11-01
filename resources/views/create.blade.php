<form action="{{ route('user.store') }}" method="post">
    @csrf
    <lable for="name">Name</lable>
    <input type="text" name="name" id="name"><br><br>
    <lable for="phone">Phone number</lable>
    <input type="text" name="phone" id="phone"><br><br>
    <lable for="email">Email</lable>
    <input type="text" name="email" id="email"><br><br>
    <button>add</button>
</form>
