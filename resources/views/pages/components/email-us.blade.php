<div>
    <div class="container-fluid mt-5 gap-0">
        <p class="text-center fs-1 fw-semibold m-0">Langganan Email Kami</p>
        <p class="text-center text-black-50 fs-5 fw-semibold">Langganan email kami dengan menginput alamat email anda demi informasi yang selalu up-to-date terkait artikel dan blog.</p>
        <div class="row mt-1 justify-content-center">
            <div class="col-sm-4">
                <img class="img d-block w-100" src="{{ asset('/images/email/email.jpg') }}" alt="img email">
            </div>
            <div class="col-sm-5">
                <form action="" class="mt-5">
                    <div class="input input-group-lg">
                        <label for="username" class="form-label fw-semibold fs-5">Nama Lengkap</label>
                        <input type="text" id="username" class="form-control" placeholder="Masukkan nama lengkap anda...">
                        <label for="email" class="form-label fw-semibold fs-5 mt-3">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Masukkan email anda..." aria-labelledby="emailHelper">
                        <div id="emailHelper" class="form-text text-danger">*Kami tidak akan menyebarkan email anda kepada orang lain</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4 px-5 fw-semibold fs-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>