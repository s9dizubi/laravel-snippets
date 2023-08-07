url()->previous() // returns the previous url
str_replace(url('/'), '', url()->previous()) // returns the previuos url without the domain. e.g. http://example.com/user : user
