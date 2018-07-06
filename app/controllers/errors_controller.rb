class ErrorsController < ApplicationController
  skip_before_action :verify_authenticity_token, only: [:error_404]

  def error_404
    @requested_path = request.path
    render plain: "No such path #{@requested_path}", status: 404
  end
end
