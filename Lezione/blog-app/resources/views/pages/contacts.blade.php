<x-layout title="Contatcs">

    <div class="container">
    <h1>Contatti</h1>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="border p-4 mt-5">
                    <h2 class="text-center mb-4">Contattaci</h2>
                    <form action="{{ route('contacts.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input name="email" type="email" class="form-control mt-2" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only my-2">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="form-group text-center mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    </div>

</x-layout>