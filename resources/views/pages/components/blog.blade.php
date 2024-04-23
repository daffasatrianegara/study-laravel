<div>
    <div class="container-fluid mt-5">
        <p class="fs-1 text-center fw-semibold">Blog trending hari ini</p>
        <div class="row mt-3 mx-5">
            @php
            $cards = collect([
            [
            'title' => 'AI VS Programmer',
            'url' => 'https://img.freepik.com/free-vector/background-realistic-abstract-technology-particle_23-2148431735.jpg?t=st=1713854156~exp=1713857756~hmac=62499dff2d7d7e967d30cc21840a784f6e226f46a9b1aba7a0e9c126df7e063c&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'Web Design Principles',
            'url' => 'https://img.freepik.com/free-photo/ui-ux-representations-with-laptop_23-2150201871.jpg?t=st=1713861810~exp=1713865410~hmac=4e6f1c10acf58f2f12cc15fa322ac4d24ccd9c6a1ffd1978b71c9e14ff2bb033&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'The Future of Website',
            'url' => 'https://img.freepik.com/free-photo/programming-background-collage_23-2149901783.jpg?t=st=1713861864~exp=1713865464~hmac=2926884b3df7b0737f614c98b4c7975ef714114c8271c8423e97fa8dd145c4b0&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'Sejarah singkat AI',
            'url' => 'https://img.freepik.com/free-photo/robot-handshake-human-background-futuristic-digital-age_53876-129770.jpg?t=st=1713861948~exp=1713865548~hmac=4cec7c1ed01f2a92c97270355cde2a3003d5dda02ad85ca24bc3c543d967ccd1&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'Sejarah singkat AI (2)',
            'url' => 'https://img.freepik.com/free-photo/robot-handshake-human-background-futuristic-digital-age_53876-129770.jpg?t=st=1713861948~exp=1713865548~hmac=4cec7c1ed01f2a92c97270355cde2a3003d5dda02ad85ca24bc3c543d967ccd1&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'Arsitektur Komputer',
            'url' => 'https://img.freepik.com/free-photo/architecture-plan-blueprint-layout-work-concept_53876-124263.jpg?t=st=1713871352~exp=1713874952~hmac=fa65c455b630575f72b27ec2658720ef44da649defb6370182d71f10358ed503&w=826',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'Ferrari vs Tesla',
            'url' => 'https://img.freepik.com/free-photo/modern-car-futuristic-road_23-2151021149.jpg?t=st=1713871466~exp=1713875066~hmac=0b7648e4a0a62da2859cb6a50c718c2408e8e465d940f9b1f1df4a00b29ebc9f&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            [
            'title' => 'UI/UX Design',
            'url' => 'https://img.freepik.com/free-vector/flat-design-ui-ux-background-illustrated_23-2149054879.jpg?t=st=1713871617~exp=1713875217~hmac=566a446bf5189acc363ee2dfd9048a2cebf70f16305f33bca35582cc98053ff4&w=900',
            'caption' => 'Lorem ipsum dolor sit, amet consectetur adipisicing...'
            ],
            ]);
            @endphp
            @foreach($cards as $card)
            <div class="col col-sm-3 mt-3">
                <div class="card" style="height: 60vh; cursor: pointer;">
                    <img class="card-img-top w-100" src="{{ $card['url'] }}" alt="{{ $card['title'] }}" style="height: 55%;">
                    <div class="card-body">
                        <p class="card-title h5">{{ $card['title'] }}</p>
                        <p class="card-text">{{ $card['caption'] }}</p>
                        <Button class="btn btn-primary">Baca Artikel</Button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-3 text-center">
        <a href="#" class="text fs-5">Lihat Artikel Lainnya...</a>
    </div>
</div>