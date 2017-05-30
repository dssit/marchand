Rails.application.routes.draw do
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
	root 'site#index'
	get '/edit', to: 'site#edit'
	get '/search', to: 'site#search'
	get '/lesson', to: 'site#lesson'
    get '/download/:key', to: 'site#download'

    get '/login', to: 'site#login'
    get '/logout', to: 'site#logout'
end
