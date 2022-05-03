set("init.allow_root",true)
set("init.daemon.pidfile.path", "/etc/liquidsoap/daemon/pid.txt")
set("init.daemon",true)
%include "crossfade.liq"
myplaylist = playlist(reload=43200,"/etc/liquidsoap/playlist.pls")
security = single("/etc/liquidsoap/music/default.mp3")
radio = myplaylist
radio = normalize(radio)
radio = smart_crossfade(start_next=8., fade_in=6., fade_out=6., width=2., conservative=true, radio)
radio = fallback(track_sensitive = false, [radio, security])
output.icecast(%vorbis.cbr(samplerate=44100, channels=2, bitrate=128),host = "localhost", port = 8001, password = "admin", mount = "/stream",name="My cool webradio name", description="A nice description for my webradio",radio)
