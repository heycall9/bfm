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
badd +4 app/views/pemesanan/index.php
badd +87 app/controllers/Pembayaran.php
badd +68 ~/.config/coc/extensions/node_modules/coc-snippets/Readme.md
badd +1 ./
badd +41 app/controllers/Pemesanan.php
badd +43 app/views/lapangan/jadwal.php
badd +1 app/controllers/DataLapanganFutsal.php
badd +1 app/models/Pemesan.php
badd +42 app/models/Pesanan.php
badd +16 /opt/lampp/htdocs/bfm/app/models/PengelolaLapanganFutsal.php
badd +54 app/core/Database.php
argglobal
%argdel
$argadd ./
edit app/models/Pesanan.php
argglobal
balt app/core/Database.php
setlocal fdm=syntax
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal nofen
let s:l = 34 - ((26 * winheight(0) + 20) / 40)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 34
normal! 016|
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
