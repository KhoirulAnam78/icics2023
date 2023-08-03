<div>
    <div class="row mb-2">
        <div class="col-lg-6">
            <a class="btn btn-success">Export</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email Validation</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Full Name (with academic title)</th>
                            <th scope="col">Participant Type</th>
                            <th scope="col">Institution</th>
                            <th scope="col">Address</th>
                            <th scope="col">HKI Member</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Fax</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $item)
                            <tr>
                                <td>{{ ($participants->currentpage() - 1) * $participants->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->user->email_verified_at != null ? 'Verified' : 'Not Verified' }}</td>
                                <td>{{ $item->full_name1 }}</td>
                                <td>{{ $item->full_name2 }}</td>
                                <td>{{ $item->participant_type }}</td>
                                <td>{{ $item->institution }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->hki_status }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->fax }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination pagination-sm mt-3 float-right ">
                @if (count($participants) != 0)
                    {{ $participants->links() }}
                @endif
            </ul>
        </div>
    </div>
</div>
