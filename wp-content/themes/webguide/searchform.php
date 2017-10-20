<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div id="custom-search-input">
	    <div class="input-group col-sm-12">
	        <input type="text" name="s" id="s" class="form-control input-sm" placeholder="<?php the_search_query(); ?>" />
	            <span class="input-group-btn">
	                <button class="btn btn-info btn-sm" type="submit" id="searchsubmit" value="Search">
	                    <i class="glyphicon glyphicon-search"></i>
	                </button>
	            </span>
	    </div>
	</div>
</form>