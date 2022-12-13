let SessionLoad = 1
let s:so_save = &g:so | let s:siso_save = &g:siso | setg so=0 siso=0 | setl so=-1 siso=-1
let v:this_session=expand("<sfile>:p")
silent only
silent tabonly
cd /opt/lampp/htdocs/bfm
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
let s:shortmess_save = &shortmess
if &shortmess =~ 'A'
  set shortmess=aoOA
else
  set shortmess=aoO
endif
badd +44 app/views/pemesanan/index.php
badd +87 app/controllers/Pembayaran.php
badd +68 ~/.config/coc/extensions/node_modules/coc-snippets/Readme.md
badd +1 ./
badd +39 app/controllers/Pemesanan.php
badd +43 app/views/lapangan/jadwal.php
badd +45 app/controllers/DataLapanganFutsal.php
badd +1 app/models/Pemesan.php
badd +1 app/models/Pesanan.php
badd +24 /opt/lampp/htdocs/bfm/app/models/PengelolaLapanganFutsal.php
badd +54 app/core/Database.php
badd +1 app/views/home/index.php
badd +1 app/views/pembayaran/index.php
badd +124 ~/.config/coc/extensions/node_modules/coc-php-cs-fixer/README.md
badd +1 output:///php-cs-fixer
badd +18 ~/.dotfiles/nvim/.config/nvim/coc-settings.json
badd +70 ~/.config/coc/extensions/node_modules/coc-php-cs-fixer/package.json
badd +25 /opt/lampp/htdocs/bfm/app/controllers/Login.php
badd +26 /opt/lampp/htdocs/bfm/app/models/Aktor.php
badd +30 /opt/lampp/htdocs/bfm/app/models/LapanganFutsal.php
badd +1 /opt/lampp/htdocs/bfm/app/controllers/Home.php
badd +8 /opt/lampp/htdocs/bfm/app/controllers/KelolaLapangan.php
badd +2 /opt/lampp/htdocs/bfm/app/controllers/Logout.php
badd +1 /opt/lampp/htdocs/bfm/app/views/daftar-penyedia/daftarLapangan.php
badd +13 /opt/lampp/htdocs/bfm/app/controllers/Register.php
badd +4 /opt/lampp/htdocs/bfm/app/controllers/Dashboard.php
badd +21 app/views/daftar-penyedia/index.php
badd +41 app/views/templates/header.php
badd +44 /opt/lampp/htdocs/bfm/app/views/login/index.php
badd +7 app/core/Flasher.php
badd +1 app/views/templates/footer.php
argglobal
%argdel
$argadd ./
edit app/controllers/DataLapanganFutsal.php
argglobal
balt /opt/lampp/htdocs/bfm/app/models/LapanganFutsal.php
setlocal fdm=syntax
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal nofen
let s:l = 23 - ((14 * winheight(0) + 21) / 43)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 23
normal! 030|
tabnext 1
if exists('s:wipebuf') && len(win_findbuf(s:wipebuf)) == 0 && getbufvar(s:wipebuf, '&buftype') isnot# 'terminal'
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20
let &shortmess = s:shortmess_save
let s:sx = expand("<sfile>:p:r")."x.vim"
if filereadable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &g:so = s:so_save | let &g:siso = s:siso_save
let g:this_session = v:this_session
let g:this_obsession = v:this_session
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
