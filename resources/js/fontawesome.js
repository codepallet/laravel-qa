
import { library, icon } from '@fortawesome/fontawesome-svg-core'

import {faCaretUp,
    faCaretDown,
    faStar,
    faCheck }from '@fortawesome/free-svg-core';


library.add(faCaretUp, faCaretDown);

const igloo = icon({ prefix: 'fas', iconName: 'igloo' })

// Kicks off the process of finding <i> tags and replacing with <svg>
dom.watch()
