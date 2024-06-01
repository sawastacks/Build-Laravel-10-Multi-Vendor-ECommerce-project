<div>
    
    <div class="tab">
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item">
                <a wire:click.prevent='selectTab("general_settings")' class="nav-link {{ $tab == 'general_settings' ? 'active' : '' }}" data-toggle="tab" href="#general_settings" role="tab" aria-selected="true">General settings</a>
            </li>
            <li class="nav-item">
                <a  wire:click.prevent='selectTab("logo_favicon")' class="nav-link {{ $tab == 'logo_favicon' ? 'active' : '' }}" data-toggle="tab" href="#logo_favicon" role="tab" aria-selected="false">Logo & Favicon</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("social_networks")' class="nav-link {{ $tab == 'social_networks' ? 'active' : '' }}" data-toggle="tab" href="#social_networks" role="tab" aria-selected="false">Social networks</a>
            </li>
            <li class="nav-item">
                <a wire:click.prevent='selectTab("payment_methods")' class="nav-link {{ $tab == 'payment_methods' ? 'active' : '' }}" data-toggle="tab" href="#payment_methods" role="tab" aria-selected="false">Payment methods</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade {{ $tab == 'general_settings' ? 'active show' : '' }}" id="general_settings" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit='updateGeneralSettings()'>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site name</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site name" wire:model='site_name'>
                                    @error('site_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site email</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site email" wire:model='site_email'>
                                    @error('site_email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site phone</b></label>
                                    <input type="text" class="form-control" placeholder="Enter site phone" wire:model='site_phone'>
                                    @error('site_phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><b>Site meta keywords</b><small> Separated by comma (a,b,c)</small></label>
                                    <input type="text" class="form-control" placeholder="Enter site meta keywords" wire:model='site_meta_keywords'>
                                    @error('site_meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label for="">Site Address</label>
                            <input type="text" class="form-control" placeholder="Enter site address" wire:model="site_address">
                            @error('site_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="">Site meta description</label>
                            <textarea  cols="4" rows="4" placeholder="Site meta desc...." class="form-control" wire:model='site_meta_description'></textarea>
                            @error('site_meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'logo_favicon' ? 'active show' : '' }}" id="logo_favicon" role="tabpanel">
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                             <h5>Site logo</h5>
                             <div class="mb-2 mt-1" style="max-width: 200px;">
                                 <img wire:ignore src="" class="img-thumbnail" data-ijabo-default-img="/images/site/{{ $site_logo }}" id="site_logo_image_preview">
                             </div>
                             <form action="{{ route('admin.change-logo') }}" method="POST" enctype="multipart/form-data" id="change_site_logo_form">
                              @csrf
                              <div class="mb-2">
                                <input type="file" name="site_logo" id="site_logo" class="form-control">
                                <span class="text-danger error-text site_logo_error"></span>
                              </div>
                              <button type="submit" class="btn btn-primary">Change logo</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h5>Site favicon</h5>
                            <div class="mb-2 mt-1" style="max-width: 100px;">
                                <img wire:ignore src="" alt="" class="img-thumbnail" id="site_favicon_image_preview" data-ijabo-default-img="/images/site/{{ $site_favicon }}">
                            </div>
                            <form action="{{ route('admin.change-favicon') }}" method="post" enctype="multipart/form-data" id="change_site_favicon_form">
                             @csrf
                             <div class="mb-2">
                                <input type="file" name="site_favicon" id="site_favicon" class="form-control">
                                <span class="text-danger error-text site_favicon_error"></span>
                             </div>
                             <button type="submit" class="btn btn-primary">Change favicon</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'social_networks' ? 'active show' : '' }}" id="social_networks" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit='updateSocialNetworks()'>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Facebook URL</b></label>
                                    <input type="text" class="form-control" wire:model='facebook_url' placeholder="Enter facebook URL">
                                    @error('facebook_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Twitter URL</b></label>
                                    <input type="text" class="form-control" wire:model='twitter_url' placeholder="Enter twitter URL">
                                    @error('twitter_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Instagram URL</b></label>
                                    <input type="text" class="form-control" wire:model='instagram_url' placeholder="Enter instagram URL">
                                    @error('instagram_url'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>YouTube URL</b></label>
                                    <input type="text" class="form-control" wire:model='youtube_url' placeholder="Enter YouTube URL">
                                    @error('youtube_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>GitHub URL</b></label>
                                    <input type="text" class="form-control" wire:model='github_url' placeholder="Enter GitHub URL">
                                    @error('github_url'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for=""><b>Linkedin URL</b></label>
                                    <input type="text" class="form-control" wire:model='linkedin_url' placeholder="Enter Linkedin URL">
                                    @error('linkedin_url'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade {{ $tab == 'payment_methods' ? 'active show' : '' }}" id="payment_methods" role="tabpanel">
                <div class="pd-20">
                    ------ Payment methods ------
                </div>
            </div>
        </div>
    </div>

</div>
