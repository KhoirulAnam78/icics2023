<div>

    <div class="row mb-2">
        <div class="col-lg-6">
            <a class="btn btn-success" wire:click="export()">Export</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="search2">Search</label>
                <input type="text" class="form-control" id="search2" name="search2"
                    wire:model.debounce.500ms="search2" placeholder="Search by full name">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="participant">
                    Filter Payment Status
                </label>
                <select class="custom-select" id="search" name="search" wire:model.debounce.500ms='search'>
                    <option value="">All</option>
                    <option value="valid">Validated</option>
                    <option value="not yet validated">Not yet validated</option>
                </select>
            </div>
        </div>

    </div>
    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-lg-12">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Email</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Total Bill</th>
                            <th scope="col">Invoice For</th>
                            <th scope="col">Status</th>
                            <th scope="col">Validated By</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($payments) == 0)
                            <tr>
                                <td colspan="9" align="center">No data</td>
                            </tr>
                        @endif
                        @foreach ($payments as $item)
                            <tr>
                                <td>{{ ($payments->currentpage() - 1) * $payments->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->participant->user->email }}</td>
                                <td>{{ $item->participant->full_name1 }}</td>
                                <td>{{ $item->total_bill }}</td>
                                <td>{{ $item->upload_abstract_id == null ? 'participant' : $item->uploadAbstract->title }}
                                </td>
                                <td>{{ $item->validation }}</td>
                                <td>{{ $item->validated_by }}</td>
                                <td><button class="btn btn-primary"
                                        wire:click="showValidate('{{ $item->id }}')">Validate</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination pagination-sm mt-3 float-right ">
                @if (count($payments) != 0)
                    {{ $payments->links() }}
                @endif
            </ul>
        </div>
    </div>

    <div class="modal fade" id="modalValidate" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditTitle">Payment Validation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="empty()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="full_name1">Full Name</label>
                                <input type="text" disabled
                                    class="form-control @error('full_name1') is-invalid @enderror" id="full_name1"
                                    name="full_name1" wire:model.debounce.500ms="full_name1">
                                @error('full_name1')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" disabled class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" wire:model.debounce.500ms="email">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="participant_type">Participant Type</label>
                                <input type="text" disabled
                                    class="form-control @error('participant_type') is-invalid @enderror"
                                    id="participant_type" name="participant_type"
                                    wire:model.debounce.500ms="participant_type">
                                @error('participant_type')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="text" disabled class="form-control @error('fee') is-invalid @enderror"
                                    id="fee" name="fee" wire:model.debounce.500ms="fee">
                                @error('fee')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="text" disabled
                                    class="form-control @error('discount') is-invalid @enderror" id="discount"
                                    name="discount" wire:model.debounce.500ms="discount">
                                @error('discount')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fee_after_discount">Fee After Discount</label>
                                <input type="text" disabled
                                    class="form-control @error('fee_after_discount') is-invalid @enderror"
                                    id="fee_after_discount" name="fee_after_discount"
                                    wire:model.debounce.500ms="fee_after_discount">
                                @error('fee_after_discount')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="total_bill">Total Bill</label>
                                <input type="text" disabled
                                    class="form-control @error('total_bill') is-invalid @enderror" id="total_bill"
                                    name="total_bill" wire:model.debounce.500ms="total_bill">
                                @error('total_bill')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="form-group">
                                <label for="">Invoice :</label>
                                <div class="row mx-3 card">
                                    @if ($invoice)
                                        <img src="{{ asset('storage/' . $invoice) }}" style="max-width:100%">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" wire:click='invalid()'>Invalid</button>
                    <button class="btn btn-primary" wire:click='valid()'>Valid</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        wire:click="empty()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#modalValidate').modal('hide');
            });
            window.addEventListener('show-modal', event => {
                // console.log('MASUK SINI');
                $('#modalValidate').modal('show');
            });
        </script>
    @endsection
</div>
