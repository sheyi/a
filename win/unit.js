var Log={debug:!0,log:function(e){this.debug}},_isMobileDevice=!!/Android|webOS|iPhone|iPad|iPod|BB10|BlackBerry|IEMobile|Opera Mini|Mobile|mobile/i.test(navigator.userAgent||"");function initIndexedDB(e,o){return new Promise(((n,t)=>{let r=indexedDB.open(e,1);r.onupgradeneeded=function(t){let r=t.target.result;for(let n=0;n<o.length;n++){let t=o[n];r.objectStoreNames.contains(t)||(r.createObjectStore(t),Log.log("initIndexedDB createTable success: "+e+" - "+t))}n()},r.onsuccess=function(e){n()},r.onerror=function(o){Log.log("initIndexedDB createTable error: "+e+" - "+table+" - "+o),t()}}))}function saveIndexedDB(e,o,n,t){return new Promise(((r,d)=>{indexedDB.open(e,1).onsuccess=function(d){let l=d.target.result.transaction(o,"readwrite").objectStore(o),s=l.delete(n);s.onsuccess=function(d){Log.log("saveIndexedDB delete success: "+e+" - "+o+" - "+n);let s=l.add(t,n);s.onsuccess=function(t){r(!0),Log.log("saveIndexedDB add success: "+e+" - "+o+" - "+n)},s.onerror=function(t){r(!1),Log.log("saveIndexedDB add error: "+e+" - "+o+" - "+n)}},s.onerror=function(t){r(!1),Log.log("saveIndexedDB delete error: "+e+" - "+o+" - "+n)}}}))}function loadIndexedDB(e,o,n,t){return new Promise(((r,d)=>{let l=indexedDB.open(e,1);l.onsuccess=function(d){let l=d.target.result;try{let d=l.transaction([o],"readonly").objectStore(o).get(n);d.onsuccess=function(d){t&&t(d.target.result),d.target.result?(r(d.target.result),Log.log("loadIndexedDB success : "+e+" - "+o+" - "+n)):(r(null),Log.log("loadIndexedDB data is null : "+e+" - "+o+" - "+n))},d.onerror=function(t){r(null),Log.log("loadIndexedDB get error : "+e+" - "+o+" - "+n)}}catch(d){r(null),Log.log("loadIndexedDB get error : "+e+" - "+o+" - "+n)}},l.onerror=function(t){r(null),Log.log("loadIndexedDB open error : "+e+" - "+o+" - "+n)}}))}