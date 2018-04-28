<table class="table table-bordered">
        <tr>
        <th>Nama</th>
        <th>{{Form::text('name',null,['placeholder'=>'Fill Your Name'])}}</th>
        </tr>
        <tr>
        <th>Email</th>
        <th>{{Form::text('email',null,['placeholder'=>'Fill Email'])}}</th>
        </tr>
        <tr>
        <th>Password</th>
        <th>{{Form::password('password',['placeholder'=>'User Password'])}}</th>
        </tr>
</table>

