class SiteController < ApplicationController
    IMAGE_LIMIT = 24

    def index
        # Retrieve featured topics and images available to the public
        @cards = TopicAssignment.joins(:image).joins(:topic).where(:images => {:featured => 1, :public => 1}, :topics => {:featured => 1}).order("RANDOM()").limit(IMAGE_LIMIT)
    end

    def search
        query = params[:q].present? ? params[:q] : "*"
        @images = Image.search(query).records
        # if params[:query].present?
        #     @cards = Image.search(params[:query]).records
        # else
        #     if params[:bestof].present? && params[:bestof]
        #         @cards = TopicAssignment.joins(:image).joins(:topic).where(:images => {:featured => 1, :public => 1}, :topics => {:featured => 1, }, :topic_id => params[:topic_id])
        #     end
        # end
    end

    def edit
    end
    
    def lesson
    end
end