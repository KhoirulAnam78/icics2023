<div>
    @if ($add == true)
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Add Payment</h2>
                </div>
            </div>
        </div>
        <form wire:submit.prevent="save">
            {{-- <div class="form-group">
                <label for="topic">
                    Payment For
                </label>
                <select class="custom-select @error('topic') is-invalid @enderror" id="topic" name="topic"
                    wire:model='topic'>
                    <option value="">Choose One</option>
                    <option value="organic and bio chemistry">Organic and Bio Chemistry</option>
                    <option value="analytical and enviromental chemistry">Analytical and Enviromental Chemistry</option>
                    <option value="inorganic and material chemistry">Inorganic and Material Chemistry</option>
                    <option value="physical and computation chemistry">Physical and Computation Chemistry</option>
                    <option value="chemical education">Chemical Education</option>
                </select>
                @error('topic')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}

            {{-- <div class="form-group">
                <label for="type">
                    Type
                </label>
                <select class="custom-select @error('type') is-invalid @enderror" id="type" name="type"
                    wire:model='type'>
                    <option value="">Choose One</option>
                    <option value="oral presentation">Oral Presentation</option>
                </select>
                @error('type')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}

            <div class="form-group">
                <label for="total_bill">Title</label>
                <input type="text" class="form-control @error('total_bill') is-invalid @enderror" id="total_bill"
                    placeholder="Title" name="total_bill" wire:model='total_bill'>
                @error('total_bill')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="authors">All Authors</label>
                <textarea class="form-control @error('authors') is-invalid @enderror" id="authors" rows="3"
                    placeholder="All Authors" name="authors" wire:model='authors'></textarea>
                @error('authors')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="institutions">Institutions</label>
                <textarea class="form-control @error('institutions') is-invalid @enderror" id="institutions" rows="3"
                    placeholder="Institutions" name="institutions" wire:model='institutions'></textarea>
                @error('institutions')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="abstract">Content of Abstract</label>
                <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" rows="3"
                    placeholder="Content of abstract" name="abstract" wire:model='abstract'></textarea>
                @error('abstract')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                    placeholder="Keywords" name="keywords" wire:model='keywords'>
                @error('keywords')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="presenter">Presenter</label>
                <input type="text" class="form-control @error('presenter') is-invalid @enderror" id="presenter"
                    aria-describedby="emailHelp" placeholder="Presenter" name="presenter" wire:model='presenter'>
                @error('presenter')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" wire:click='cancel()'>Cancel</a>
        </form>
    @else
        <button class="btn btn-primary" wire:click="add()">Add Payment</button>
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (count($payments) !== 0)
            <table class="table my-3">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Total Bill</th>
                        <th scope="col">Status Validation</th>
                        <th scope="col">Validated By</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $a = 0;
                    @endphp
                    @foreach ($payments as $item)
                        <tr>
                            <th scope="row">{{ ++$a }}</th>
                            <td>{{ $item->total_bill }}</td>
                            <td>{{ $item->validation }}</td>
                            <td>{{ $item->validated_by }}</td>
                            <td>
                                {{-- @if ($item->status == 'not yet reviewed')
                                    <button class="btn btn-info"
                                        wire:click='editAbstract({{ $item->id }})'>edit</button>
                                @else
                                    <p>No actions</p>
                                @endif --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
</div>
