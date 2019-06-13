function plyst(playlist, idVideo, user) {
  if (playlist === 'fav') {
    window.location.href = "./playlist.php?playlist=fav&idVideo=" + idVideo;
  }
  else if (playlist === 'wl') {
    window.location.href = "./playlist.php?playlist=wl&idVideo=" + idVideo;
  }
}
