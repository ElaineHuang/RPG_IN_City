// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.adapter;

import android.view.View;
import butterknife.ButterKnife.Finder;
import butterknife.ButterKnife.Injector;

public class CommentsAdapter$CommentViewHolder$$ViewInjector<T extends io.github.froger.instamaterial.ui.adapter.CommentsAdapter.CommentViewHolder> implements Injector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    View view;
    view = finder.findRequiredView(source, 2131558542, "field 'ivUserAvatar'");
    target.ivUserAvatar = finder.castView(view, 2131558542, "field 'ivUserAvatar'");
    view = finder.findRequiredView(source, 2131558543, "field 'tvComment'");
    target.tvComment = finder.castView(view, 2131558543, "field 'tvComment'");
  }

  @Override public void reset(T target) {
    target.ivUserAvatar = null;
    target.tvComment = null;
  }
}
