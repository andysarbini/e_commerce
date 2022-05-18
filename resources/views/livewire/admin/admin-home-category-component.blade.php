<div>
    {{-- The whole world belongs to you. --}}
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Choose Categories</label>
                                <div class="col-md-4" wire:ignore>
                                    <select wire:model="selected_categories" name="categories[]" multiple="multiple" class="sel_categories form-control" >
                                        @foreach ($categories as $category) --}}
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                            {{-- <option value="one">satu</option>
                                            <option value="two">dua</option>
                                            <option value="three">tiga</option> --}}
                                            {{-- <option value="one" {{ $selected_categories == "one" ? 'selected="selected"' : '' }}>satu</option>
                                            <option value="two" {{ $selected_categories == "two" ? 'selected="selected"' : '' }}>dua</option>
                                            <option value="three" {{ $selected_categories == "three" ? 'selected="selected"' : '' }}>tiga</option> --}}
                                    </select>
                                </div>
                                
                            </div>

                            {{-- <div class="form-group">
                                <label for="country" class="col-md-4 control-label">Country</label>
                                <div class="col-md-4">
                                    <select name="country" wire:model="country" class="form-control" id="">
                                        <option selected disabled>Choose a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{$country->province_id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (count($regencies) > 0)
                                <label for="regency">Regency</label>
                                <div class="col-md-4">
                                    <select name="regency" wire:model="regency" class="form-control">
                                        <option selected>Choose a regency</option>
                                        @foreach ($regencies as $regency)
                                            <option value="{{$regency->id}}">{{$regency->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                            </div> --}}
                            
                            {{-- <div class="form-group">
                                <label for="" class="col-md-4 control-label">select categories</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="selected_categories">
                                </div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="" class="col-md-4 control-label">No Of Products</label>
                                <div class="col-md-4">
                                    @livewire('admin.admin-home-category-component')
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">No Of Products</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="numberofproducts">
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-md-4">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush