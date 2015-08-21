// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.adapter;

import android.view.View;
import butterknife.ButterKnife.Finder;
import butterknife.ButterKnife.Injector;

public class FeedAdapter$CellFeedViewHolder$$ViewInjector<T extends io.github.froger.instamaterial.ui.adapter.FeedAdapter.CellFeedViewHolder> implements Injector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    View view;
    view = finder.findRequiredView(source, 2131558546, "field 'ivFeedCenter'");
    target.ivFeedCenter = finder.castView(view, 2131558546, "field 'ivFeedCenter'");
    view = finder.findRequiredView(source, 2131558549, "field 'ivFeedBottom'");
    target.ivFeedBottom = finder.castView(view, 2131558549, "field 'ivFeedBottom'");
    view = finder.findRequiredView(source, 2131558551, "field 'btnComments'");
    target.btnComments = finder.castView(view, 2131558551, "field 'btnComments'");
    view = finder.findRequiredView(source, 2131558550, "field 'btnLike'");
    target.btnLike = finder.castView(view, 2131558550, "field 'btnLike'");
    view = finder.findRequiredView(source, 2131558552, "field 'btnMore'");
    target.btnMore = finder.castView(view, 2131558552, "field 'btnMore'");
    view = finder.findRequiredView(source, 2131558547, "field 'vBgLike'");
    target.vBgLike = view;
    view = finder.findRequiredView(source, 2131558548, "field 'ivLike'");
    target.ivLike = finder.castView(view, 2131558548, "field 'ivLike'");
    view = finder.findRequiredView(source, 2131558553, "field 'tsLikesCounter'");
    target.tsLikesCounter = finder.castView(view, 2131558553, "field 'tsLikesCounter'");
    view = finder.findRequiredView(source, 2131558544, "field 'ivUserProfile'");
    target.ivUserProfile = finder.castView(view, 2131558544, "field 'ivUserProfile'");
    view = finder.findRequiredView(source, 2131558545, "field 'vImageRoot'");
    target.vImageRoot = finder.castView(view, 2131558545, "field 'vImageRoot'");
  }

  @Override public void reset(T target) {
    target.ivFeedCenter = null;
    target.ivFeedBottom = null;
    target.btnComments = null;
    target.btnLike = null;
    target.btnMore = null;
    target.vBgLike = null;
    target.ivLike = null;
    target.tsLikesCounter = null;
    target.ivUserProfile = null;
    target.vImageRoot = null;
  }
}
