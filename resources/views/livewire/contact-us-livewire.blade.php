<div>
    <form wire:submit="save" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="col form-group">
                <input type="text" name="name" class="form-control" wire:model.live="name" placeholder="Your Name">
                 @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col form-group">
                <input type="email" class="form-control" name="email" wire:model.live="email" placeholder="Your Email"
                    >
                     @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" wire:model.live="message" rows="5" placeholder="Message"></textarea>
             @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
</div>
