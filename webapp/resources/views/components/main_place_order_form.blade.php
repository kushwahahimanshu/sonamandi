<div class="row bg-white padding-15px-all">
    <div class="col-12">
        <!-- start post item --> 
        <div class="blog-post-content margin-20px-bottom padding-20px-bottom md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left" style="border-bottom: 1px solid #c4c4c4;">
            <div class="row">
                <div class="col-12">
                    <h1 class="alt-font text-black font-weight-600 text-uppercase" style="font-size: 20px; line-height: 35px;">Order: {{ $product->title }}</h1>
                </div>
                <div class="col-12 margin-20px-top">
                    <label class="mo-margin-bottom margin-5px-top">Fill your details below</label>
                </div>
                <div class="col-12">
                    <form enctype="multipart/form-data" method="post" action="{{ url('place-order-submit') }}">
                        @csrf
                        <input type="hidden" name="key" value="{{ $product->id }}">
                        <div class="row">
                            <div class="col-12">
                                <label class="font-weight-400">Full Name</label>
                                <input type="text" name="name" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">Phone</label>
                                <input type="text" name="phone" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">Email</label>
                                <input type="text" name="email" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">Address</label>
                                <input type="text" name="address" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">City</label>
                                <input type="text" name="city" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">State</label>
                                <input type="text" name="state" required style="line-height: 16px;">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-400">Pincode</label>
                                <input type="text" name="pin" required style="line-height: 16px;">
                            </div>
                            <div class="col-12 margin-20px-top">
                                <label class="font-weight-400">Price: ₹{{ $product->price }}</label>
                            </div>
                            <div class="col-12 margin-20px-bottom">
                                <label class="font-weight-400">Payment Method: Cash on Delivery only</label>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-deep-pink text-uppercase margin-10px-tb" value="Place Order">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end post item --> 
    </div>
</div>