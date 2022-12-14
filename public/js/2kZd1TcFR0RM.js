// check if wallet is already connected

window.onload = () => {
    checkAccountIsConnected();
}



const checkAccountIsConnected = async () => {
    if (isMetaMaskInstalled()) {
        const activeAccounts = await isAccountConnected();
        if (activeAccounts.length !== 0) {
            if(window.location.pathname === "/index5.html"){
                $('.connect-btn-wrapper').html(`
                    <button class="btn-small-gray hov_shape_show">
                        <img src="assets/images/icon/connect_wallet.svg" alt="" class="btn_icon"/>
                        ${activeAccounts[0].substr(0, 10)}
                        <span class="hov_shape1"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="hov_shape2"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="square_hov_shape"></span>
                    </button>
                `);
            }else{
                $('.connect-btn-wrapper').html(`
                    <button class="connect_btn hov_shape_show">
                        <img src="assets/images/icon/connect_wallet.svg" alt="" />
                        ${activeAccounts[0].substr(0, 10)}
                        <span class="hov_shape1"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="hov_shape2"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="square_hov_shape"></span>
                    </button>
                `);
            }
        }
    }
}


//connect meta
$('.connect-meta').on('click', async function () {
    if (isMetaMaskInstalled()) {
        const activeAccounts = await connectWallet();
        if (activeAccounts.length !== 0) {
            $('#connectModal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            if(window.location.pathname === "/index5.html"){
                $('.connect-btn-wrapper').html(`
                    <button class="btn-small-gray hov_shape_show">
                        <img src="assets/images/icon/connect_wallet.svg" alt="" class="btn_icon"/>
                        ${activeAccounts[0].substr(0, 10)}
                        <span class="hov_shape1"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="hov_shape2"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="square_hov_shape"></span>
                    </button>
                `);
            }else{
                $('.connect-btn-wrapper').html(`
                    <button class="connect_btn hov_shape_show">
                        <img src="assets/images/icon/connect_wallet.svg" alt="" />
                        ${activeAccounts[0].substr(0, 10)}
                        <span class="hov_shape1"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="hov_shape2"><img src="assets/images/icon/hov_shape_s.svg" alt="" /></span>
                        <span class="square_hov_shape"></span>
                    </button>
                `);
            }
        }
    } else {
        $('#connectModal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('#download-metamask').modal('show');
    }
});