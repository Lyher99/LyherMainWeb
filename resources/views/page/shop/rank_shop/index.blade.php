@extends('layout.app')
@section('link')
@endsection
@section('style')
@endsection
@section('container')
    <div class="container pb-5 px-1">
        <h3 class="fw-bold py-5 pb-4">Rank Store &gt;</h3>
        <div class="row rounded rounded-5 p-5 bg-light shadow">
            <div class="col-12 col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <img id="rank_img" class="w-100" src="{{ asset('assets/img/shop/viprank.png') }}" alt="error">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 py-5 d-flex justify-content-center">
                <div class="m-auto d-block">
                    <h4 class="" id="rank_name">Benefits of VIP Rank</h4>
                    <p id="rank_desc">
                        <br>Exclusive chat colors 💬
                        <br>Access to VIP-only commands ⚡
                        <br>Special perks on the server 🎮
                        <br>Priority access to events 🏆
                        <br>A cool VIP prefix in your name! ✨
                    </p>
                </div>
            </div>
            <div class="col-12">
                <form action="#">
                    <div class="form-group py-4">
                        <label for="username" class="py-2">Minecraft Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="Platform" class="py-2">Platform</label>
                        <select name="Platform" id="Platform" class="form-control">
                            <option value="JAVA" selected>JAVA</option>
                            <option value="BEDROCK" selected>KING</option>
                        </select>

                    </div>
                    <div class="form-group py-3">
                        <label for="rank" class="py-2">Rank</label>
                        <select name="rank" id="rank" class="form-control" onchange="price_check()">
                            <option value="VIP" selected>VIP</option>
                            <option value="KING">KING</option>
                        </select>

                    </div>
                    <div class="form-group py-3">
                        <label for="price" class="py-2">Price</label>
                        <input type="text" class="form-control" id="price" name="price" readonly required>
                    </div>
                    <div class="form-group py-3">
                        <label for="payment" class="py-2">Payment</label>
                        <input type="file" class="form-control" id="payment" name="payment" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function price_check() {
            var vpi_name = 'Benefits of VIP Rank';
            var king_name = 'Benefits of KING Rank';

            var vpi_description = `
            <br>Exclusive chat colors 💬
            <br>Access to VIP-only commands ⚡
            <br>Special perks on the server 🎮
            <br>Priority access to events 🏆
            <br>A cool VIP prefix in your name! ✨
            `;
            var king_description = `
            <br>Exclusive chat colors 💬
            <br>Access to King-only commands ⚡
            <br>Special perks on the server 🎮
            <br>Priority access to events 🏆
            <br>A cool King prefix in your name! ✨
            `;


            // Get the rank value
            var rank = $('#rank').val();


            if (rank === 'VIP') {
                // Change the image source for VIP rank
                $('#rank_img').attr('src', `{{ asset('assets/img/shop/viprank.png') }}`);
                $('#price').val('5');
                $('#rank_name').html(vpi_name);
                $('#rank_desc').html(vpi_description);
            } else {
                // Change the image source for non-VIP rank
                $('#rank_img').attr('src', `{{ asset('assets/img/shop/kingrank.png') }}`);
                // Update price to 15
                $('#price').val('15');
                $('#rank_name').html(king_name);
                $('#rank_desc').html(king_description);
            }
        }

        price_check();
    </script>
@endsection
