<div>
    <div class="row mb-2">
        <div class="col-lg-12">
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
                            <th scope="col">Full Name</th>
                            <th scope="col">Status HKI Member</th>
                            <th scope="col">Validated By</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $item)
                            <tr>
                                <td>{{ ($participants->currentpage() - 1) * $participants->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->full_name1 }}</td>
                                <td>{{ $item->hki_status }}</td>
                                <td>{{ $item->hki_validated_by }}</td>
                                <td><a href="" class="btn btn-primary">Validate</a></td>
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

    <div class="modal fade" id="modalValidate" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <form role="form" wire:submit.prevent="update">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Validate HKI</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="full_name1">Full Name</label>
                            <input type="text" class="form-control @error('full_name1') is-invalid @enderror"
                                id="full_name1" name="full_name1" wire:model="full_name1" placeholder="judul">
                            @error('full_name1')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            Member Card HKI :
                            {{-- @if ($existImage != null && $image == null)
                                <div class="row">
                                    <div class="col-3 card me-1 mb-1">
                                        <img src="{{ asset('storage/' . $existImage) }}">
                                    </div>
                                </div>
                            @elseif($image !== null)
                                <div class="row">
                                    <div class="col-3 card me-1 mb-1">
                                        <img src="{{ $image->temporaryUrl() }}">
                                    </div>
                                </div>
                            @else --}}
                            <div class="row">
                                <div class="col-3 card me-1 mb-1">
                                    <img
                                        src="https://www.gme.net.au/app/plugins/wp-media-folder/assets/images/default.png">
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click="empty()">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
