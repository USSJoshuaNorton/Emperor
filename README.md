Emperor is a fork of version 1.0 of the [Neptune](https://xtras.anodyne-productions.com/item/emily/neptune) skin for [Nova](http://anodyne-productions.com/nova) done by [Amy](mailto:amy@deathkitten.net) for use on the [USS Joshua Norton](https://sfintel.space); the original skin was created by [Emily](https://xtras.anodyne-productions.com/profile/emily). This skin incorporates elements from both [Bootstrap](https://getbootstrap.com/) and [Font Awesome](https://fontawesome.com/). Edits are permissible as long as original credits stay intact.

---

This skin does not have a version for the wiki section. You will need to find another skin for you wiki section if you use the Thresher wiki provided with Nova.

---

# Installation

1. Acquire the files in your preferred manner—download zip file and unzip locally before uploading via ftp, upload zip file directly to your remote server and unzip there, use git, carrier pigeon, subspace transmission, etc—and place decompressed files in `/application/views/`. Ensure that everything is in a folder called `emperor`.
2. Navigate to `Control Panel > Site Management > Skin Catalog`, click the `Install` next to `Emperor` at the top of the page.
3. Navigate to `Control Panel > Site Management > Settings > User-created Settings > Manage User-Created Settings`
4. Add User-Created Setting:
    * Label: `Font Awesome Type` Setting Key: `FAtype` Value: `fas` for free Solid Font Awesome, `far` for free Regular Font Awesome, `fal` for pro¹ Light Font Awesome
    * Label: `Font Awesome Source` Setting Key: `FAsrc` Value: the url to where your Font Awesome `all.css` is going to be served from², be it locally hosted or the Font Awesome CDN.
    
    
¹ This skin was designed with the Light version of Font Awesome, but requires the purchase of a license from [Font Awesome](https://fontawesome.com/pro) to use. The solid and regular versions are available for free.

² More information available at: https://fontawesome.com/start/
