@extends('Layouts.master')

@section('title', 'Participation')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">

            <form id="form" action="{{ url('participation') }}" method="POST">

                @csrf

                <input type="hidden" name="payment_method" id="payment_method">
                <input type="text" name="montant"class="form-control my-2" id="montant" placeholder="Montant">
                <div id="card-element"></div>

                <button type="submit" class="btn btn-success"  id="submit-button">
                    Participez
                </button>
            </form>

        </div>

        <div class="col-md-2"></div>
    </div>
</div>




@endsection

@section('script')

<script src="https://js.stripe.com/v3/">
</script>
<script>

   const stripe = Stripe(" {{ env('STRIPE_KEY')}} ");
   const elements = stripe.elements();
   const cardElement = elements.create('card', {
       classes: {
           base: "StripeElement form-control my-2"
       }
   });

   cardElement.mount('#card-element');

   const cardButton = document.getElementById('submit-button');

   cardButton.addEventListener('click', async(e)=>{
       e.preventDefault();

       const {paymentMethod, error} = await stripe.createPaymentMethod('card', cardElement);

       if(error){
           alert(error)
       }else{
           document.getElementById('payment_method').value=paymentMethod.id;
       }

       document.getElementById('form').submit();

   });

</script>


@endsection
