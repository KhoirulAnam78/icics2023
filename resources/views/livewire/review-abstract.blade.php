<div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="search2">Search</label>
                <input type="text" class="form-control" id="search2" name="search2" wire:model.debounce.500ms="search2"
                    placeholder="Search by presenter name">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="participant">
                    Filter Status Reviewed
                </label>
                <select class="custom-select" id="search" name="search" wire:model='search'>
                    <option value="">All</option>
                    <option value="ted">Reviewed</option>
                    <option value="not yet reviewed">Not yet reviewed</option>
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="search">Filter Status HKI Member</label>
                <select name="search" id="search" wire:model='search' class="form-control">

                </select>
            </div> --}}
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
                            <th scope="col">Presenter</th>
                            <th scope="col">Title</th>
                            <th scope="col">Keywords</th>
                            <th scope="col">Status</th>
                            <th scope="col">Reviewed By</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($abstracts) == 0)
                            <tr>
                                <td colspan="7" align="center">No data</td>
                            </tr>
                        @endif
                        @foreach ($abstracts as $item)
                            <tr>
                                <td>{{ ($abstracts->currentpage() - 1) * $abstracts->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $item->participant->full_name1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->keywords }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->reviewed_by }}</td>
                                <td><button class="btn btn-primary"
                                        wire:click="showValidate('{{ $item->id }}')">Review</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination pagination-sm mt-3 float-right ">
                @if (count($abstracts) != 0)
                    {{ $abstracts->links() }}
                @endif
            </ul>
        </div>
    </div>

    <div class="modal fade" id="modalValidate" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditTitle">Review Abstract</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="empty()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group mx-3">
                            <label for="topic">
                                Topic
                            </label>
                            <select disabled class="custom-select @error('topic') is-invalid @enderror" id="topic"
                                name="topic" wire:model='topic'>
                                <option value="">Choose One</option>
                                <option value="organic and bio chemistry">Organic and Bio Chemistry</option>
                                <option value="analytical and enviromental chemistry">Analytical and Enviromental
                                    Chemistry
                                </option>
                                <option value="inorganic and material chemistry">Inorganic and Material Chemistry
                                </option>
                                <option value="physical and computation chemistry">Physical and Computation Chemistry
                                </option>
                                <option value="chemical education">Chemical Education</option>
                            </select>
                            @error('topic')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">
                                Type
                            </label>
                            <select disabled class="custom-select @error('type') is-invalid @enderror" id="type"
                                name="type" wire:model='type'>
                                <option value="">Choose One</option>
                                <option value="oral presentation">Oral Presentation</option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <textarea disabled class="form-control @error('title') is-invalid @enderror" id="title" rows="3"
                            placeholder="All Authors" name="title" wire:model='title'></textarea>
                        @error('title')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="authors">All Authors</label>
                        <textarea disabled class="form-control @error('authors') is-invalid @enderror" id="authors" rows="3"
                            placeholder="All Authors" name="authors" wire:model='authors'></textarea>
                        @error('authors')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="institutions">Institutions</label>
                        <textarea disabled class="form-control @error('institutions') is-invalid @enderror" id="institutions"
                            placeholder="Institutions" rows="3" name="institutions" wire:model='institutions'></textarea>
                        @error('institutions')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="abstract">Content of Abstract</label>
                        <textarea disabled class="form-control @error('abstract') is-invalid @enderror" id="abstract" rows="15"
                            placeholder="Content of abstract" name="abstract" wire:model='abstract'></textarea>
                        @error('abstract')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <textarea disabled class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                            placeholder="Institutions" rows="3" name="keywords" wire:model='keywords'></textarea>
                        @error('keywords')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="presenter">Presenter</label>
                        <input disabled type="text" class="form-control @error('presenter') is-invalid @enderror"
                            id="presenter" aria-describedby="emailHelp" placeholder="Presenter" name="presenter"
                            wire:model='presenter'>
                        @error('presenter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" wire:click='reject()'>Reject</button>
                    <button class="btn btn-primary" wire:click='accept()'>Accept</button>
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
