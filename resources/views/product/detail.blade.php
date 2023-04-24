
@section('title', 'Product Details')
 <x-app-layout>

  <section class="product">
    <div class="container">
      <h2>Product Details</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="https://images.unsplash.com/photo-1501501625015-5c5a5d3b5f5b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZHVjdHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Product Image" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet elit eu aliquet
                tristique. Maecenas sit amet dapibus erat.</p>
              <p class="card-text">Price: $100</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

 </x-app-layout>
