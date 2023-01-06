
<table class="table-auto border-spacing-2 border-collapse border border-slate-400">

    <thead>

      <th class="border border-slate-300">Name</th>

      <th class="border border-slate-300">Registration</th>

      <th class="border border-slate-300">Department</th>
      
      <th class="border border-slate-300">Semester</th>

      <th class="border border-slate-300">Phone No.</th>

      <th class="border border-slate-300">Address</th>

      <th class="border border-slate-300">Picture</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr style="height : auto">

          <td>{{$user->name}} </td>

          <td>{{ $user->registration }}</td>

          <td>{{$user->department}} </td>

          <td>{{$user->semester}} </td>

          <td>{{ $user->phone }}</td>

          <td>{{ $user -> address }}</td>

          <td>
            @if ($user->avatar)
                <img src="{{ asset('avatars/'.$user->avatar) }}" width="100px" height="100px" alt="Profile Picture">
            @endif
        </td>

        </tr>
@endforeach

    </tbody>

</table>
