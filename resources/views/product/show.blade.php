@extends("app")
@section("content")

<div class="row">
    <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <img src="https://picsum.photos/300/450" alt="">
                </div>
            </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
        
                <div>
                    <h4>{{ $product->product_name }}</h4>
                </div>
                <div class="text-danger">
                    <h3>{{ $product->list_price }} TL</h3>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Satıcı: Betül'ün Dükkanı
            </div>
        <div class="card-body">
            <button type="button" class="btn btn-outline-dark">Sepete Ekle</button>
        </div>
        <div class="card">
            <div class="card-body">
                <ul><li class="return-info">15 gün içinde ücretsiz iade.Detaylı bilgi için <a class="pr-in-dt-link" href="javascript:void(0)">tıklayın</a></li><li><div class="productDetailSupplierPopup" style="left: 609.706px; display: none;"><div class="popupBuffer"></div><div class="popupContent"><div class="popup-top"><div class="popup-logo"><i class="icon icon-trendyol-marketplace"></i></div><div class="popup-info"><div class="ttl">TRENDYOL PAZARYERİ</div><div class="description">Tüm satıcılarımız Trendyol hizmet standartlarını garanti eder.</div><div class="attributes"><div><i class="pdp-icon-reloaded"></i>Ücretsiz İade</div><div><i class="pdp-icon-cargo"></i> Hızlı Teslimat</div><div><i class="pdp-icon-phone"></i> Trendyol <br>Müşteri Desteği</div></div></div></div><div class="supplier-info"><span>Satıcı:<b> Mango </b></span><span>Satıcı Ünvanı:<b> MANGO T.R. TEKSTİL TİC.LTD.ŞTİ. </b></span><span>İletişim:<b> Satıcının Trendyol tarafından teyit edilmiş e-posta ve iletişim adresi kayıt altındadır. </b></span><span><span id="cityInfo">Şehir:<b>  İstanbul  </b></span></span><span><span>Vergi Kimlik Numarası:<b> 6120096964 </b></span></span></div></div></div>Bu ürün <span class="pr-in-dt-spn">Mango</span> tarafından gönderilecektir.</li><span><li>Etek .-- rachel</li><li>Bu üründen en fazla 10 adet sipariş verilebilir. 10 adetin üzerindeki siparişleri Trendyol iptal etme hakkını saklı tutar.</li><li>Kampanya fiyatından satılmak üzere 10 adetten fazla stok sunulmuştur.</li><li>İncelemiş olduğunuz ürünün satış fiyatını satıcı belirlemektedir.</li><li>Bu ürün indirim kampanyasına dahil değildir.</li></span></ul>
            </div>
        </div>

        </div>
    </div>

</div>

<div class="row">
    <div class="col">
        <div class="card shadow-lg border-primary">
            <div class="card-header">
                <h4>Ürün Değerlendirmesi</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach($yorumlar as $bok)
                        <li class="list-group-item">
                            {{$bok}}
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>



@endsection

